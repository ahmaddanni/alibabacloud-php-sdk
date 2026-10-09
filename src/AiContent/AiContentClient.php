<?php

declare(strict_types=1);

namespace Dew\Acs\AiContent;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createAccessWarrant(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise createAccessWarrantAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result queryApplicationAccessId(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise queryApplicationAccessIdAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result queryProjectList(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise queryProjectListAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result queryProject(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise queryProjectAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result createProject(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise createProjectAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result updateProject(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise updateProjectAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result queryPurchasedService(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise queryPurchasedServiceAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeAITeacherChineseCompositionTutoringWorkflowRun(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeAITeacherChineseCompositionTutoringWorkflowRunAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result getTextbookAssistantToken(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise getTextbookAssistantTokenAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result listTextbookAssistantGradeVolumes(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise listTextbookAssistantGradeVolumesAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result listTextbookAssistantBooks(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise listTextbookAssistantBooksAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result listTextbookAssistantBookDirectories(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise listTextbookAssistantBookDirectoriesAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result listTextbookAssistantArticles(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise listTextbookAssistantArticlesAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result listTextbookAssistantArticleDetails(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise listTextbookAssistantArticleDetailsAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result listTextbookAssistantSceneDetails(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise listTextbookAssistantSceneDetailsAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeTextbookAssistantStartConversation(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeTextbookAssistantStartConversationAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeTextbookAssistantDialogue(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeTextbookAssistantDialogueAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeTextbookAssistantSseDialogue(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeTextbookAssistantSseDialogueAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeTextbookAssistantTranslate(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeTextbookAssistantTranslateAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeTextbookAssistantSuggestion(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeTextbookAssistantSuggestionAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeTextbookAssistantDifficulty(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeTextbookAssistantDifficultyAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeTextbookAssistantRefineByContext(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeTextbookAssistantRefineByContextAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeTextbookAssistantGrammarCheck(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeTextbookAssistantGrammarCheckAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeTextbookAssistantRetryConversation(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeTextbookAssistantRetryConversationAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeAITeacherEnglishParaphraseChatMessage(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeAITeacherEnglishParaphraseChatMessageAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeAITeacherEnglishCompositionTutoringWorkflowRun(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeAITeacherEnglishCompositionTutoringWorkflowRunAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result aITeacherSyncPracticeTaskGenerate(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise aITeacherSyncPracticeTaskGenerateAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeAITeacherSyncDialogue(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeAITeacherSyncDialogueAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeAITeacherSyncDialogueTranslate(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeAITeacherSyncDialogueTranslateAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result getAITeacherSyncDialogueSuggestion(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise getAITeacherSyncDialogueSuggestionAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result aITeacherExpansionPracticeTaskGenerate(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise aITeacherExpansionPracticeTaskGenerateAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeAITeacherExpansionDialogue(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeAITeacherExpansionDialogueAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeAITeacherExpansionDialogueTranslate(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeAITeacherExpansionDialogueTranslateAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result getAITeacherExpansionDialogueSuggestion(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise getAITeacherExpansionDialogueSuggestionAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeAITeacherExpansionDialogueRefine(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeAITeacherExpansionDialogueRefineAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result executeAITeacherGrammarCheck(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise executeAITeacherGrammarCheckAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result aliyunConsoleOpenApiQueryAliyunConsoleServiceList(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise aliyunConsoleOpenApiQueryAliyunConsoleServiceListAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result personalizedTextToImageQueryPreModelInferenceJobInfo(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise personalizedTextToImageQueryPreModelInferenceJobInfoAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result personalizedTextToImageAddInferenceJob(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise personalizedTextToImageAddInferenceJobAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result personalizedTextToImageQueryImageAsset(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise personalizedTextToImageQueryImageAssetAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result personalizedtxt2imgQueryInferenceJobInfo(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise personalizedtxt2imgQueryInferenceJobInfoAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result personalizedtxt2imgAddInferenceJob(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise personalizedtxt2imgAddInferenceJobAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result personalizedtxt2imgAddModelTrainJob(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise personalizedtxt2imgAddModelTrainJobAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result personalizedtxt2imgQueryImageAsset(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise personalizedtxt2imgQueryImageAssetAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result personalizedtxt2imgQueryModelTrainJobList(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise personalizedtxt2imgQueryModelTrainJobListAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result personalizedtxt2imgQueryModelTrainStatus(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise personalizedtxt2imgQueryModelTrainStatusAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result aliyunConsoleOpenApiQueryAliyunConsoleServcieList(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise aliyunConsoleOpenApiQueryAliyunConsoleServcieListAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result countOralEvaluationStatisticsConcurrent(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise countOralEvaluationStatisticsConcurrentAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result countOralEvaluationStatisticsCalls(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise countOralEvaluationStatisticsCallsAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result countOralEvaluationStatisticsError(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise countOralEvaluationStatisticsErrorAsync($arguments = []) {@since 20240611}
 * @method \Dew\Acs\Result aliyunConsoleOpenApiQueryPaidResource(array $arguments = []) {@since 20240611}
 * @method \Http\Promise\Promise aliyunConsoleOpenApiQueryPaidResourceAsync($arguments = []) {@since 20240611}
 */
final class AiContentClient extends AcsClient
{
    //
}
